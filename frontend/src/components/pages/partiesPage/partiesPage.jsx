import React from 'react';
import style from './partiesPage.module.css';

export const PartiesPage = (props) => {
	return (
		<div className={`container`}>
			<div className={`${style.filter}`}>filter</div>

			<div className={`${style.nextEvent}`}>next event</div>

			<div className={`${style.events}`}>events</div>
		</div>
	);
};
