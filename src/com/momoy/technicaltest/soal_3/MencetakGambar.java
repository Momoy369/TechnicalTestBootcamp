package com.momoy.technicaltest.soal_3;

public class MencetakGambar {

    public static void main(String[] args){
        double n = 5;
        if(n % 2 == 0){
            System.out.println("Error!");
        } else{
            for(int i = 0; i < n; i++){
                String line = "";

                for(int j = 0; j < n; j++){
                    if(j == 0 || j == n - 1){
                        line += " * ";
                    } else if(i == Math.floor(n/2)){
                        line += " * ";
                    } else {
                        line += " = ";
                    }
                }
                System.out.println(line);
            }
        }
    }
}
