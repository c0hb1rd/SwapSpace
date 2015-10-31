package com.example.android.tcpproject;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.net.Socket;

/**
 * Created by android on 31/10/15.
 */
public class ServerThread implements Runnable {

    Socket socket = null;
    BufferedReader bufferedReader = null;

    public ServerThread(Socket socket) throws IOException {
        this.socket = socket;
        bufferedReader = new BufferedReader(new InputStreamReader(socket.getInputStream(), "utf-8"));
    }

    @Override
    public void run() {
        try {
            String content = null;
            while ( (content = readFromClient()) != null) {
                for (Socket s : MainServer.socketList) {
                    OutputStream outputStream = s.getOutputStream();
                    outputStream.write((content + "\n").getBytes("utf-8"));
                }
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public String readFromClient() {
        try {
            return bufferedReader.readLine();
        } catch (IOException e) {
            MainServer.socketList.remove(socket);
        }
        return null;
    }
}
