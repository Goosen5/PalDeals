// example data
const games = [
	{ name: 'Cyberpunk 2077', img: 'assets/images/cyberpunk.png' },
	{ name: 'Minecraft', img: 'assets/images/minecraft.png' },
	{ name: 'Valorant', img: 'assets/images/valorant.png' }
];
const user = {
	name: 'Alex Dupont',
	email: 'alex.dupont@email.com',
	avatar: 'assets/images/user.png',
	level: 12,
	diamonds: 340
};
const achievements = [
	{ title: 'Premier achat', desc: 'Acheté un jeu', icon: 'assets/images/trophy.png' },
	{ title: 'Collectionneur', desc: '5 jeux achetés', icon: 'assets/images/trophy.png' }
];

window.onload = function() {
	// Fill games
	const gamesDiv = document.getElementById('profile-games');
	gamesDiv.innerHTML = games.map(g => `<div class='game-card'><div class='example-bank-space'></div><span>${g.name}</span></div>`).join('');
	// Fill user
	document.getElementById('profile-name').textContent = user.name;
	document.getElementById('profile-email').textContent = user.email;
	document.getElementById('profile-level').textContent = 'Niveau: ' + user.level;
	document.getElementById('profile-diamonds').textContent = 'Diamants: ' + user.diamonds;
	// Fill achievements
	const achDiv = document.getElementById('profile-achievements');
	achDiv.innerHTML = achievements.map(a => `<div class='achievement-card'><div class='example-bank-space'></div><div><strong>${a.title}</strong><br/><span>${a.desc}</span></div></div>`).join('');
};