import React from 'react';
import { NavLink } from 'react-router-dom';
import style from './navigation.module.css';

export const Navigation = (props) => {
	return (
		<nav className={`${style.menu}`}>
			<NavLink className={`${style.item}`} to='/dating'>
				Dating
			</NavLink>
			<NavLink className={`${style.item}`} to='/kinkBNB'>
				KinkBNB
			</NavLink>
			<NavLink className={`${style.item}`} to='/parties'>
			Parties
			</NavLink>
			<NavLink className={`${style.item}`} to='/forum'>
				Forum
			</NavLink>
			<NavLink className={`${style.item}`} to='/blogs'>
				Blogs
			</NavLink>
			<NavLink className={`${style.item}`} to='/shops'>
				Shops
			</NavLink>
			<NavLink className={`${style.item}`} to='/about'>
				About Us
			</NavLink>
		</nav>
	);
};
