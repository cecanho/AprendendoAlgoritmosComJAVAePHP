package main;

import javax.swing.JOptionPane;

public class Exercicio010 {
	
	public static void main(String[] args) {
		int C1, C2, C3;
		C1 = Integer.parseInt(JOptionPane.showInputDialog("Informe o 1o comprimento:"));
		C2 = Integer.parseInt(JOptionPane.showInputDialog("Informe o 2o comprimento:"));
		C3 = Integer.parseInt(JOptionPane.showInputDialog("Informe o 3o comprimento:"));
		
		if(((C1 + C2) > C3) & ((C1 + C3) > C2) & ((C2 + C3) > C1)){
			JOptionPane.showMessageDialog(null, "Os três lados formam um triângulo");
		}else {
			JOptionPane.showMessageDialog(null, "Os três lados não formam um triângulo");
		}
	}

}
