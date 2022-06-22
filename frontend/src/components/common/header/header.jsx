import React from 'react';
import { Navigation } from './navigation/navigation';
import { NavLink } from 'react-router-dom';
import style from './header.module.css';

export const Header = (props) => {
	return (
		<header>
			<NavLink to='/'>
				<h2 className={`${style.logo}`}>Logo</h2>
			</NavLink>

			<Navigation />
		</header>
	);
};
