import React, {useState, useEffect}  from 'react';
import style from './mainPage.module.css';
import { RegisterForm } from './registerForm/registerForm';

export const MainPage = (props) => {
	const [users, setUsers] = useState('pups');
	useEffect( () => {
 		     fetch('/api/users')
			.then((response) => response.json())
			.then((actualData)=>setUsers(actualData)
			)},[]);

	function handleClick(){
		console.log(users)
	}
	return (
		<main className={`container ${style.container}`}>

			{/*{users.map((u)=>(<li>kuk</li>))}*/}
			<div className={`${style.blue}`}>
				<RegisterForm />
			</div>
			<div className={`${style.green}`}>2
				<button value="submit" onClick={handleClick}>Click Me</button>
			</div>

			<div className={`${style.red}`}>3</div>
		</main>
	);
};
