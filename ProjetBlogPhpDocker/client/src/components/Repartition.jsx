import {useState} from "react";

export default function Repartition( ) {

    const [formData, setFormData] = useState({
        cost: 0,
        people: 0
    });

    function handleChange(e) {
        const { cost, people } = e.target;
        setFormData(prevData => ({
            ...prevData,
            [cost]: e.target.value,
            [people]: e.target.value
        }));
    }

      return (
        <div>
          <p>Le coût total est de
              <input type="number"
                     onChange={handleChange}
                     value={formData.cost}
              />€
              et il y a

              <input
                  type="number"
                  value={formData.people}
                  onChange={handleChange}
              /> personnes.</p>

          <p>Le coût par personne est de {10 /2 }</p>
        </div>
      );
}
