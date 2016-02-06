package com.gmichaels.studytask.java;

import java.io.IOException;

public class StartClass extends Queue {

    static QueueGetSet qGetSet = new QueueGetSet();
    static AlgSort algSort = new AlgSort();

    public static void main(String[] args) throws IOException {
        // SORT

//        init();
//        add(9);
//        add(2);
//        add(2);
//        add(7);
//        add(9);
//        add(0);
//        add(7);
//        add(1);
//        add(9);
//        add(1);
//        // algSort.countSort(); Сортировка с созданием массива, вводом его значений.
//        AlgSort2.countSort2(data);

        // QUEUE

        // Init
        System.out.println("Initialization");
        init();

        // Empty
        System.out.println("Check empty (true/false): ");
        System.out.println(isEmpty());

        // Add
        System.out.println("Add elements.(" + size +")");
        add(5);
        add(10);
        add(15);
        add(20);
        add(25);
        add(30);
        add(9000);

        // Empty
        System.out.println("Again check empty.");
        System.out.println(isEmpty());

        // Get element
        System.out.print("Get element ");
        getElem(2);

        // Get last element
        System.out.print("Get last element ");
        getHead();

        // Set value X in element I
        System.out.print("Before SET: ");
        getElem(2);
        qGetSet.set(2, 9);
        System.out.print("After SET: ");
        getElem(2);

        // get the value  X of the element I
        System.out.println("GET: " + qGetSet.get(3));

        // QUEUE
    }

}
