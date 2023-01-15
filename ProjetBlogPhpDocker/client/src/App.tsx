import {BrowserRouter, Routes, Route, Link} from 'react-router-dom';
import './App.css';
import Register from './components/Register';
import Login from './components/Login';
import Dashboard from './components/Dashboard';

function App() {
  return (
    <div className="App">
      <h5>Coloc</h5>

      <BrowserRouter>
        <nav>
          <ul>
            <li>
              <Link to="user/register">S'inscrire</Link>
            </li>
          </ul>
        </nav>
        <Routes>
          <Route index element={<Login />} />
          <Route path="user/register" element={<Register />} />
          <Route path="user/dashboard" element={<Dashboard />} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;