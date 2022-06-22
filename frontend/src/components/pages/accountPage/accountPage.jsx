import React from 'react';
import style from './accountPage.module.css';

export const AccountPage = (props) => {
	return (
		<div className={`container`}>
			<div className={`${style.header}`}>
				<div className={`${style.avatar}`}>Avatar</div>
				<div className={`${style.userInfo}`}>User info</div>
				<nav className={`${style.menu}`}>Menu</nav>
			</div>
		</div>
	);
};
