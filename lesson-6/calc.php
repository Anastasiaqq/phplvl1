<form action="server2.php" method="POST">

    <p>Введите первое число:</p>
    <input type="text" name="n1">
    
    <p><select size="4" name="sign[]">
        <option disabled>Выберите действие</option>
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="mltpl">*</option>
        <option value="divide">/</option>
        </select></p>
    <p>Введите второе число:</p>
    <input type="text" name="n2">
    <button type="submit">Отправить</button>
    
  
</form>

