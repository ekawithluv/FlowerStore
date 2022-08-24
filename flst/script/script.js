const btn = document.querySelector(".add");

function getData()
{
    var myTbody = document.querySelector(".productsTable>tbody");
    myTbody.innerHTML = "";
fetch('../ajax/get-data.php')
    .then((res) => res.json())
    .then((data) => {
        data.forEach(obj => {
           
           var newRow = myTbody.insertRow();
            newRow.insertCell().append(obj.id);
            newRow.insertCell().append(obj.name);
            newRow.insertCell().append(obj.amount);
            newRow.insertCell().append(obj.price);

        });
    })
    .catch((error) => console.log(error))
}

function addData()
    {

        let nameData = document.querySelector('.nd').value;
        let amountData = document.querySelector('.ad').value;
        let priceData = document.querySelector('.pd').value;

        var form = new FormData();
        form.append('name', nameData);
        form.append('amount', amountData);
        form.append('price', priceData);


        fetch('../ajax/add-data.php', {
            method : 'post',
            body: form
        })
          .then((res) => getData())
          .catch((error) => console.log(error))

    }

    getData();

    btn.addEventListener('click', function(event) {
        addData();
      });