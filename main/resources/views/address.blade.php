<div class="main_container">
    <h1>CEP Finder</h1>
    <!-- Postal code form -->
    <div class="form">
        <input type="text" value="{{$address->cep ?? ""}}"/>
        <button type="submit" id="button">Search</button>
    </div>

    <!-- Errors information -->
    <div class="errors_info">
        <p></p>
    </div>

    <!-- Address information -->
    @if(isset($address->cep))
        <div class="address_info">
            <p>CEP: <span>{{ $address->cep }}</span></p>
            <p>Logradouro: <span>{{ $address->logradouro }}</span></p>
            <p>Bairro: <span>{{ $address->bairro }}</span></p>
            <p>Localidade: <span>{{ $address->localidade }}</span></p>
            <p>UF: <span>{{ $address->uf }}</span></p>
        </div>
    @else
        <div class="error_container">
            <p>{{ $error }}</p>
        </div>
    @endif

</div>

<script>
    document.querySelector("#button").addEventListener("click", function (){
        let cep = document.querySelector("input").value;
        window.location.href = `http://localhost:8000/cep/${cep}`;
    })
</script>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        align-self: center;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .main_container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 10px;

        width: 100%;
        max-width: 500px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .error_container{
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f1f1f1;
    }

    .error_container > p{
        font-weight: bold;
        color: red;
    }

    input{
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    span{
        font-weight: bold;

    }

    button{
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f1f1f1;
        cursor: pointer;
    }

</style>
