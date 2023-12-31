<?php 
echo '

function NavBar(props) {
    return ( 
        <div class="p-4">
            <h4 class="text-light">{props.nome}</h4>
            <hr class="text-white-50"></hr>
            <ul class="list-unstyled">
                <li><a href="/" class="text-white btn btn-secondary fill padding-to-button">CONSULTAS</a></li>
                <li><a href="/pacients.html" class="text-white btn btn-secondary fill padding-to-button">PACIENTES</a></li>
                <li><a href="/medicos.html" class="text-white btn btn-secondary fill padding-to-button">MÉDICOS</a></li>
                <li><a href="/funcionarios.html" class="text-white btn btn-secondary fill padding-to-button">FUNCIONÁRIOS</a></li>
                <li><a href="/config.html" class="text-white btn btn-secondary fill padding-to-button">CONFIGURAÇÕES</a></li>               
            </ul>
            <p><br/><br/><br/><br/></p>              
        </div>
    );
}


'?>