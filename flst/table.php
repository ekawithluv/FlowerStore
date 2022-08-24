<br>
<p>Табличка с товарами из базы данных:</p>
      <table class="productsTable table table-bordered border-dark">
        <thead class="table-dark">
        <th scope="col">Айди продукта</th>
        <th scope="col">Наименование</th>
        <th scope="col">Кол-во в наличии</th>
        <th scope="col">Цена за 1 шт.</th>
        </thead>
        <tbody>  
        </tbody>
      </table>
      <?php if(isset($_COOKIE['user']) == '') {
        echo '';} 
      else if(($_COOKIE['user']) == 'admin' ){?>
      <input type="text" class="nd" placeholder='Введите наименование'> 
      <input type="text" class="ad" placeholder='Введите кол-во в наличии'>
      <input type="text" class="pd" placeholder='Введите цену за 1 шт.'> 
      <button class="add btn btn-dark">Добавить</button>
      <?php }?> 
    </section>
    <script src="script/script.js"></script>