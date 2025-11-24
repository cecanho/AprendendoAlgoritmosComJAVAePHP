package main;

import java.util.Scanner;

public class Exercicio002 {
	
	public static void main(String args[]) {
	
		int NUM1, NUM2, AUX;
		
		try(Scanner teclado = new Scanner(System.in)){
			System.out.println("Entre como primeiro n.");
			NUM1 = teclado.nextInt();
			System.out.println("Entre como segundo n.");
			NUM2 = teclado.nextInt();
			teclado.close();
		}
		AUX = NUM1;
		NUM1 = NUM2;
		NUM2 = AUX;
		System.out.println("Valor de NUM1 = " + NUM1);
		System.out.println("Valor de NUM2 = " + NUM2);
	
	}
}
