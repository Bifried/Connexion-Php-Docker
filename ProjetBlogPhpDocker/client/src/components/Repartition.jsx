import {useState} from "react";

export default function Repartition( ) {
    const [details,setDetails] = useState({
        cost : 1,
        people : 1
    })

    const handleChange = (e) => {
        const name = e.target.name
        const value = e.target.value
        setDetails((prev) => {
            return {...prev, [name]: value}
            })
    }

      return(
        <div>
          <p>Le coût total est de
              <input type="number"
                     name="cost"
                     onChange={handleChange}

              />€
              et il y a

              <input
                  type="number"
                  name="people"
                  onChange={handleChange}
              /> personnes.</p>

          <p>Le coût par personne est de {details.cost /details.people} €</p>
        </div>
      );
}
