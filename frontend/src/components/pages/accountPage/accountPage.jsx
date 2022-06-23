import React from 'react';
import { NavLink } from 'react-router-dom';
import style from './accountPage.module.css';

export const AccountPage = (props) => {
	return (
		<div className={`container`}>
			<div className={`${style.header}`}>
				<div className={`${style.avatar}`}>Avatar</div>

				<div className={`${style.userInfo}`}>User info</div>

				<nav className={`${style.menu}`}>
					<NavLink className={`${style.menuItem}`} to='/account/my_kink_bnb'>
						My KinkBNB
					</NavLink>

					<NavLink className={`${style.menuItem}`} to='/account/my_parties'>
						My Parties
					</NavLink>

					<NavLink className={`${style.menuItem}`} to='/account/my_dates'>
						My Dates
					</NavLink>
				</nav>
			</div>
		</div>
	);
};
