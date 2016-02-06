package com.gmichaels.studytask.java;// Реализовывать методы:
// set(i) т.е. занести в i-ю позицию в структуре значение х.
// get(i) т.е. получить из i-й последовательности значение x.

public class QueueGetSet extends Queue {

    void set(int i, int x) {

       data[i] = x;

    }

    int get(int i) {

        return data[i];

    }

}
