<?php
    session_start(); 
?>
<html>
    <form action="/Treinamento/user/check" method="post">
        <input name="email" placeholder="email">        
        <input name="password" placeholder="password">
        <button type="submit"> Entrar </button>        
    </form>
</html>