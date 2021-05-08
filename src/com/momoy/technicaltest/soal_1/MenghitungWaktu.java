package com.momoy.technicaltest.soal_1;

public class MenghitungWaktu {

    public static void main(String[] args){
        int velocity = 3;
        int detik = 0;
        int jarak = 0;

        while(jarak < 64500){
            detik++;
            jarak = jarak + velocity;
            if(detik % 600 == 0){
                velocity++;
            }
        }

        int jam = detik / 3600;
        detik = detik % 3600;
        int menit = detik / 60;
        detik = detik % 60;

        System.out.println(jam + " jam " + menit + " menit " + detik + " detik");

    }
}
