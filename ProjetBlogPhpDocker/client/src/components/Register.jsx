import { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

export default function Register() {
    const navigate = useNavigate();

    const [inputs, setInputs] = useState([]);

    const handleChange = (event) => {
        const name = event.target.name;
        const value = event.target.value;
        setInputs(values => ({...values, [name]: value}));
    }
    const handleSubmit = (event) => {
        event.preventDefault();

        axios.post('http://localhost:8000/', inputs).then(function(response){
            console.log(response.data);
            navigate('/');
        }); 
    }
    return (
        <div>
            <h1>Inscription</h1>
            <form onSubmit={handleSubmit}>
                <input type="text" name="firstname" onChange={handleChange} />  
                <input type="text" name="lastname" onChange={handleChange} /> 
                <input type="text" name="email" onChange={handleChange} />
                <input type="text" name="password" onChange={handleChange} />   
                <button>S'inscrire</button>          
            </form>
        </div>
    )
}