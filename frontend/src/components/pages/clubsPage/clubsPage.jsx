import React from 'react';
import style from './clubsPage.module.css';

export const ClubsPage = (props) => {
	return (
		<div className={`container ${style.container}`}>
			<div className={`${style.filter}`}>filter</div>

			<div className={`${style.clubsList}`}>Clubs list</div>
		</div>
	);
};
