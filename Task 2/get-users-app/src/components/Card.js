import React, { useEffect, useReducer, useState } from 'react'
import './Card.css'

const Card = () => {
    const [users, setUsers] = useState([]);


    useEffect(() => {
        fetch('https://reqres.in/api/users?page=1').then(res => res.json())
        .then(res => {
          console.log(res);
          setUsers(res.data);})
          .catch(err => {
            console.log(err)
          })
    })
    return (
        <div className='container-card'>
            
                {users.map((user) => {
                    return (
                        <div className='card-wrapper'>
                        <div className='card-pad'>
                        <div className='card'>
                            <div className='card-image' key={user.id}>
                                <img src={user.avatar} alt='user-image'/>
                                <div className='overlay'><h2>{user.id}<br />
                                 {user.first_name} {user.last_name}
                                    <br />
                                    <span>{user.email}</span><br /> 
                                </h2></div>
                                </div>
                            </div>
                            
                        </div>
                        </div>

                    )
                })
                }

            
        </div>

    )
}



export default Card
