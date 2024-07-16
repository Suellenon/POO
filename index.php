

<?php
// Definindo a classe Carro
class Carro{


//Declaração de propriedade pública para a marca do carro 
public $marca;

//Declaração de propriedade pública para o modelo de carro
public $modelo;
//método público para simular a ação de dirigir
public function dirigir(){ 
    //Imprimindo uma mensagem que inclui a marca e o modelo do carro
echo "Dirigindo o $this -> marca $this-> modelo";

}





   
}
//Criando uma nova instância de classe Carro
$meuCarro = new Carro();
//Atribuindo o valor "Toyota" à propriedade 'marca' do objeto $meuCarro
$meuCarro->marca = "toyota";
//Atribuindo o valor 'Corolla" à propriedade 'modelo' do objeto $meuCarro
$meuCarro->modelo ="Corolla";
//Chamando o método 'dirigir do objeto $meuCarro, que imprimirá a mensagem "Dirigindo o Toyota Corolla"
$meuCarro->dirigir();//Saída:Dirigndo o Toyota Corolla
?>