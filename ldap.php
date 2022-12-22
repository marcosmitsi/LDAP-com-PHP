


<?php
//usando um servidor de testes LDAP on line link: https://www.forumsys.com/2022/05/10/online-ldap-test-server/

//Devemos usar duas etapas para conectar ao AD com LDAP

//string DN do Usuário
$ldap_dn ="uid=".$_POST['username'].",dc=example,dc=com";
//Sena
$ldap_password = $_POST['password'];

//Usaremos ldap_connect para conectar com o servidor de diretório ativo podemos usar a url ldap.forumsys.com ou IP
$ldap_con = ldap_connect("107.23.162.222", 389);

//Versão de protocolo LDAP para não ocorrer erro.
ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

//em ldap_bind usamos a variavel objeto $ldap_con como primeiro parametro

if(@ldap_bind($ldap_con, $ldap_dn, $ldap_password)){
    echo "Logado";

    $filter = "(cn=Isaac Newton)";
    $result = ldap_search($ldap_con, "dc=example,dc=com", $filter) or exit("nenhum resultado para pesquisa");
    $entries = ldap_get_entries($ldap_con, $result);
  /*  echo"<pre>";
    var_dump($entries);
    echo "</pre> <br><br>";*/

}else{
    echo "Usuário ou senha inválidos";
}

