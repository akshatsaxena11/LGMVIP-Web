import React,{useEffect,useState} from 'react'
import './Header.css'
import Card from './Card';
const Header = () => {
    const [isToggled,setIsToggled] = useState(false);
  return (
            <div className='container'>
                <div className='nav-bar'>
                    <div className='nav-bar-text'>
                    <div className='navbar-head'>
                    <text>FetchUsers App</text>
                    <button className='nav-btn' onClick={() => setIsToggled(!isToggled)}>Get Users</button>
                   
                    </div>
                </div>
                </div>
                {isToggled ? <Card /> : <p>Click on Get Users to get user information</p>}
            <div className='div'></div>
            </div>  
              
  )
}
export default Header
