// Основной класс, реализация очереди, с головой. Вариант 3.
// №1 Инициализация.
// №2 Проверка на пустоту.
// №3 Верхний элемент. (Голова)
// №4 Добавить элемент.
// №5 Взять любой элемент и посмотреть его значение.

/**
 * Филатов просил переделать курсовую, лучше использовать не массив,
 * а сделать список можно листом ,
 * главное тчоб все элементы были связаны,
 * и к любому обратившись можно узанть кто справа и слева.
 * */

package com.gmichaels.studytask.java;

public class Queue {

    static int size = 7;
    static int[] data;
    static int head;
    static int tail;

    // #1
    static void init() {

        head = 0;
        tail = 0;
        data = new int[size + 1];

    }

    // #2
    static boolean isEmpty() {
        return tail == 0;
    }

    // #3
    static void add(int n) {

        if (data.length == 0) {
            tail = n;
        }

        head = n;
        data[tail++] = n;

    }

    // #4
    static void getElem(int i) {

        System.out.print(i + " : " + data[i] + "\n");

    }

    // #5
    static void getHead() {
        System.out.print(tail + " : " + head + "\n");
    }


}
