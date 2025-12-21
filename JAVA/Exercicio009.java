package main;

import javax.swing.JOptionPane;

public class Exercicio009 {

	public static void main(String[] args) {
		int C1, C2, C3;
		C1 = Integer.parseInt(JOptionPane.showInputDialog("Informe o 1o comprimento:"));
		C2 = Integer.parseInt(JOptionPane.showInputDialog("Informe o 2o comprimento:"));
		C3 = Integer.parseInt(JOptionPane.showInputDialog("Informe o 3o comprimento:"));
		if((C1 == C2) & (C2 == C3)) {
			JOptionPane.showMessageDialog(null, "Os tres lados formam um triângulo Equilátero!");
		}else if((C1 == C2) | (C2 == C3) | (C1 == C3)){
			JOptionPane.showMessageDialog(null, "Os tres lados formam um triângulo Isósceles!");
		}else if ((C1 != C2) & (C2 != C3)) {
			JOptionPane.showMessageDialog(null, "Os tres lados formam um triângulo Escaleno!");
		}
	}

}
