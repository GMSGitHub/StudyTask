// Сортировка подсчетом, с использованием заранее созданного массива.

package com.gmichaels.studytask.java;

public class AlgSort2 extends Queue {

    static void countSort2(int[] data) {

        // Create second array.
        int[] c = new int[size + 1];

        // Customization new array.
        for(int i = 0; i < size; i++) {
            c[data[i]]++;
        }

        // Count\Sort\Print
        for(int i = 0; i < size + 1; i++) {
            for (int j = 0; j < c[i]; j++) {
                System.out.print(i + " ");
            }
        }

    }
}