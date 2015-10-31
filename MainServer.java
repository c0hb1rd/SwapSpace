package com.example.android.tcpproject;

import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.ArrayList;
import java.util.Scanner;

/**
 * Created by android on 31/10/15.
 */
public class MainServer {

    static Scanner scan;
    public static ArrayList<Socket> socketList = new ArrayList<Socket>();

    public static void main(String [] args) throws IOException {
        System.out.print("[*] Input which Port your wanna using: ");
        scan = new Scanner(System.in);
        final int PORT = scan.nextInt();
        ServerSocket serverSocket = new ServerSocket(PORT);
        while (true) {
            Socket socket = serverSocket.accept();
            socketList.add(socket);

            new Thread(new ServerThread(socket)).start();
        }
    }
}
