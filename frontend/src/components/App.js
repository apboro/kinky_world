import React from 'react';
import { Route, Routes } from 'react-router-dom';
import { Header } from './common/header';
import { AboutUsPage } from './pages/aboutUsPage';
import { EventsPage } from './pages/eventsPage';
import { ForumPage } from './pages/forumPage';
import { GroupsPage } from './pages/groupsPage';
import { MainPage } from './pages/mainPage';
import { MembersPage } from './pages/membersPage';

export const App = () => {
	return (
		<>
			<Header />
			<Routes>
				<Route path='/' element={<MainPage />} />
				<Route path='/about' element={<AboutUsPage />} />
				<Route path='/members' element={<MembersPage />} />
				<Route path='/dates' element={<MainPage />} />
				<Route path='/events' element={<EventsPage />} />
				<Route path='/forum' element={<ForumPage />} />
				<Route path='/groups' element={<GroupsPage />} />
			</Routes>
		</>
	);
};
