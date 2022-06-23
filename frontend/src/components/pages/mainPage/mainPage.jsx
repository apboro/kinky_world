import React, {useState, useEffect}  from 'react';
import style from './mainPage.module.css';
import { RegisterForm } from './registerForm/registerForm';

export const MainPage = (props) => {
	const [users, setUsers] = useState('pups');
	useEffect( () => {
 		     fetch('http://localhost:8000/api/user')
			.then((response) => response.json())
			.then((actualData)=>console.log(actualData)
			)},[]);

	return (
		<main className={`container ${style.container}`}>

			<div className={`${style.blue}`}>
				<RegisterForm />
			</div>
			<div className={`${style.green}`}>2</div>
			<div className={`${style.red}`}>3</div>
		</main>
	);
};
