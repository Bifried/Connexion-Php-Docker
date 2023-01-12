import {BrowserRouter, Routes, Route, Link} from 'react-router-dom';
import './App.css';
import Register from './components/Register.tsx';
import Login from './components/Login.tsx';
import Dashboard from './components/Dashboard.tsx';

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <nav>
          <ul>
            <li>
              <Link to="/">Identification</Link>
            </li>
            <li>
              <Link to="register">Inscription</Link>
            </li>
          </ul>
        </nav>
        <Routes>
          <Route index element={<Login />} />
          <Route path="register" element={<Register />} />
          <Route path="dashboard" element={<Dashboard />} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;