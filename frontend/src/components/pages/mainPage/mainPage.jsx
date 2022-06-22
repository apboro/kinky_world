import React from 'react';
import style from './mainPage.module.css';
import { RegisterForm } from './registerForm/registerForm';

export const MainPage = (props) => {
	return (
		<main className={`container ${style.container}`}>
			<div className={`${style.blue}`}>
				1
				<RegisterForm />
			</div>

			<div className={`${style.green}`}>2</div>

			<div className={`${style.red}`}>3</div>
		</main>
	);
};
