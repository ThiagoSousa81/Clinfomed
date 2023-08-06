import React from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';

function Header() {
  return (
    <header>
      <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
        <div className="container">
          <a className="navbar-brand" href="/"><img src="/src/logo.jpg" alt="Logo" style={{ borderRadius: '15px', maxWidth: '65%' }} /></a>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarNav">
            <ul className="navbar-nav ms-auto">
              <li className="nav-item">
                <a className="nav-link active" href="#"><button type="button"
                  className="btn btn-secondary btn-bg w-100">Tela inicial</button></a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="#"><button type="button"
                  className="btn btn-secondary btn-bg w-100">Configurações</button></a>
              </li>
              <li className="nav-item">
                <a className="nav-link" href="#"><button type="button"
                  className="btn btn-danger btn-bg w-100">Sair</button></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  );
}

export default Header;
