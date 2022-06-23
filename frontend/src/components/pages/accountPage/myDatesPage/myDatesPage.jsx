import React from 'react';
import style from './myDatesPage.module.css';

export const MyDatesPage = (props) => {
	return (
		<div className={`container`}>
			<div className={`${style.header}`}>
				<div className={`${style.infoBlock}`}>Info block</div>

				<div className={`${style.datesInfo}`}>Dates info</div>
			</div>
		</div>
	);
};
