// Сортировка подсчетом, с созданием массива и вводом произвольных значений.

package com.gmichaels.studytask.java;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class AlgSort extends Queue {

    void countSort() throws IOException {

        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));

        int[] a = new int[100];
        int[] c = new int[100];
        int n;
        int k = 100;

        n = Integer.parseInt(br.readLine());

        for(int i = 0; i < n; i++) {
            a[i] = Integer.parseInt(br.readLine());
        }

        for(int i = 0; i < n; i++) {
            c[a[i]]++;
        }

        for(int i = 0; i < k; i++) {
            for (int j = 0; j < c[i]; j++) {
                System.out.print(i + " ");
            }
        }
    }
}
