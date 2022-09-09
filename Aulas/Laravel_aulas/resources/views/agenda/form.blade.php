<?php
    $id = isset($agenda[0]['id']) ? $agenda[0]['id'] : '';
    $nome = isset($agenda[0]['nome']) ? $agenda[0]['nome'] : '';
    $telefone = isset($agenda[0]['telefone']) ? $agenda[0]['telefone'] : '';
    $email = isset($agenda[0]['email']) ? $agenda[0]['email'] : '';
?>
<fieldset>
    <label for="id" >ID: </label>
    <input type="text" disabled value="<?=$id?>">
    <br><br>
    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="nome" value="<?=$nome?>">
    <br><br>
    <label for="telefone">Telefone: </label>
    <input type="tel" id="telefone" name="telefone" value="<?=$telefone?>">
    <br><br>
    <label for="email">Email: </label>
    <input type="email" id="email" name="email" value="<?=$email?>">
    <br><br>
    <input type="submit" value="Salvar">
    <a href="{{ route('agenda.index') }}"><button>Voltar</button></a>
</fieldset>
