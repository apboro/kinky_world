import React from 'react';
import { NavLink } from 'react-router-dom';
import style from './navigation.module.css';

export const Navigation = (props) => {
	return (
		<nav className={`${style.menu}`}>
			<NavLink className={`${style.item}`} to='/about'>
				About Us
			</NavLink>
			<NavLink className={`${style.item}`} to='/members'>
				Members
			</NavLink>
			<NavLink className={`${style.item}`} to='/dates'>
				Dates
			</NavLink>
			<NavLink className={`${style.item}`} to='/events'>
				Events
			</NavLink>
			<NavLink className={`${style.item}`} to='/forum'>
				Forum
			</NavLink>
			<NavLink className={`${style.item}`} to='groups'>
				Groups
			</NavLink>
		</nav>
	);
};
