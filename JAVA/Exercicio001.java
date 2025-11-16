package main;

import java.util.Scanner;

public class Exercicio001 {
	
	public static int NUM1 = 1;
	public static int NUM2 = 2;
	public static int SOMA = 0;

	public static void main(String[] args) {
		
		System.out.println("Entre com dois valores do tipo Inteiro:");
		
		try (Scanner teclado = new Scanner(System.in)) {
			NUM1 = teclado.nextInt();
			NUM2 = teclado.nextInt();
			teclado.close();
		}
		SOMA = NUM1 + NUM2;
		
		System.out.println("A soma dos inteiros = " + SOMA);
	}

}
