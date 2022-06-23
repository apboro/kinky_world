import React from 'react';
import style from './myPartiesPage.module.css';

export const MyPartiesPage = (props) => {
	return (
		<div className={`container`}>
			<div className={`${style.header}`}>
				<div className={`${style.infoBlock}`}>Info block</div>

				<div className={`${style.partiesInfo}`}>Parties info</div>
			</div>
		</div>
	);
};
