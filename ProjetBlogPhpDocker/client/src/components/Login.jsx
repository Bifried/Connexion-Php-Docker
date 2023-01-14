import { useState , useEffect} from "react";
// import axios from "axios";
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
        navigate('user/dashboard');
        // axios.post('http://localhost:8000/api/user/save', inputs).then(function(response){
        //     console.log(response.data);
            
        // });
    }
    return (
        <div>
            <h1>Identification</h1>
            <form onSubmit={handleSubmit}>
                <input type="text" name="email" onChange={handleChange} />
                <input type="text" name="password" onChange={handleChange} />   
                <button>S'identifer</button>          
            </form>
        </div>
    )
}