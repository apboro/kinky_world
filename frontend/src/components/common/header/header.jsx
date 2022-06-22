import React from 'react';
import { Navigation } from './navigation/navigation';
import {NavLink} from "react-router-dom";


export const Header = (props) => {
	return (
		<header>
			<NavLink to='/'>
				<h2>Logo</h2>
			</NavLink>
			<Navigation />
		</header>
	);
};
