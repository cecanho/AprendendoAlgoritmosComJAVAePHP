package main;

import javax.swing.JOptionPane;

public class Exercicio011 {

	public static void main(String[] args) {
		int l1 = Integer.parseInt(JOptionPane.showInputDialog("Entre com um lado do triângulo"));
		int l2 = Integer.parseInt(JOptionPane.showInputDialog("Entre com um lado do triângulo"));
		int l3 = Integer.parseInt(JOptionPane.showInputDialog("Entre com um lado do triângulo"));
		
		if(((l1+l2)>l3)&((l1+l3)>l2)&((l2+l3)>l1)) {
			if((l1==l2)&(l2==l3)) {
				JOptionPane.showMessageDialog(null, "Triangulo Equilatero");
			}else if(((l1==l2)&(l1!=l3))|((l1==l3)&(l1!=l2))|((l2==l3)&(l2!=l1))) {
				JOptionPane.showMessageDialog(null, "Triangulo Isosceles");
			}else {
				JOptionPane.showMessageDialog(null, "Triangulo Escaleno");
			}
		}else {
			JOptionPane.showMessageDialog(null, "Os lados informados nao formam um triangulo");
		}
	}

}
