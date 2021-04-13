-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2021 at 11:31 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wow`
--

-- --------------------------------------------------------

--
-- Table structure for table `advices`
--

CREATE TABLE `advices` (
  `Specialization` varchar(15) NOT NULL,
  `Advice1` varchar(300) NOT NULL,
  `Advice2` varchar(300) NOT NULL,
  `Advice3` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advices`
--

INSERT INTO `advices` (`Specialization`, `Advice1`, `Advice2`, `Advice3`) VALUES
('affliction', 'Affliction has a lot of damage overtime and you should try to line them behind pillars to not get too much damage', 'Affliction has a big offensive CD \"Dark Soul\" that can be purged or stealed', 'Warlocks have little mobility and bad defensives CD so they should be a priority target'),
('arcane', 'Arcane Mage has a lot of burst potential at the opening, be careful to not get oneshoot !', 'Arcane Mage have every of his spell on the Arcane School of Magic, so if you kick any of his spell, he will be fully locked for the duration of the kick', 'Mages have a very powerful defensive CD every 1 min that allows him to get back to his current HP after 10 seconds, but you can purge it !'),
('arms', 'Arms has a lot of sustained damages and applies a permanent -25% healing on his main target, so you should try to kite them as much as you can', 'Arms do a lot of damage when you\'re bellow 35% hp with his execution spell, you should try to always be above 35%hp to avoid his execution phase', 'Arms has only one big defensive CD that reduces the damage he takes for 30% and parry every physical attacks every 2 min'),
('assassination', 'Assassination has a lot of damage over time with his poisons and dots, you should try avoid being at his melee range for too long', 'Rogues will always try to get out of combat behind a pillar to get a re-stealth so you should always try to keep them in combat', 'Rogues have only 2 defensives CD (one physical one magical) so you can easely kill them, especially on a good stun'),
('balance', 'Feral has a lot of damage burst potential, especially with his covenant abilty \"Convoke the spirit\" that has 2 minutes cooldown, try to kick it as soon as he casts it', 'Feral is very tanky when he is in his Bear Form but he does very little damage in this form', 'You can stun the balance to burst him down so he can\'t use his Bear Form to mitigate the damages'),
('beastMastery', 'Beast Mastery has a very useful ability that makes an ally immune to crits', 'You can mitigate a lot of the damage from the beast mastery if you CC his pets', 'Beast Mastery lacks of defensives CD so you can easly kill him, especially on a good stun'),
('destruction', 'Destruction has big burst potential with his chaos bolts so you should try to kick it or to make sure he doesn\'t land more than one on you', 'Destruction has a big offensive CD \"Dark Soul\" that can be purged or stealed', 'Warlocks have little mobility and bad defensives CD so they should be a priority target'),
('elemental', 'Elemental has a big burst potential with his spell \"Stormkeeper\" so you should try to kick it when he casts it, or to use a defensive CD', 'Elemental has low healing potential so you should not really worry about his heals', 'Shamans have only one defensive CD every 1min30 so that makes them an easy target'),
('enhancement', 'Enhancement has an insane burst potential when he uses Ascendance and you must use a strong defensive CD to mitigate the damages', 'Enhancement has a lot of self healing potential so try to stun him if you are focusing him', 'Shamans have only one defensive CD every 1min30 so that makes them an easy target'),
('feral', 'Feral has a lot of damage burst potential, especially with his covenant abilty \"Convoke the spirit\" that has 2 minutes cooldown, try to kick it as soon as he casts it', 'Feral is very tanky when he is in his Bear Form but he does very little damage in this form', 'You can stun the feral to burst him down so he can\'t use his Bear Form to mitigate the damages'),
('fire', 'Fire Mage has the biggest burst potential in the game with his spell \"Combustion\", if he uses it, you should try to purge it, or to CC the mage and pop any Defensive CD you have', 'Fire Mage can reduce his combustion CD for 3 seconds everytime he casts a fireball, so be careful to not let him cast it too much', 'Mages have a very powerful defensive CD every 1 min that allows him to get back to his current HP after 10 seconds, but you can purge it !'),
('frostmage', 'Frost Mage has the less burst potential of the three specialization, but it deals good damage all the time', 'Frost Mage can be very annoying with all the slow and freeze they do, so you might focus them to avoid that', 'Mages have a very powerful defensive CD every 1 min that allows him to get back to his current HP after 10 seconds, but you can purge it !'),
('havoc', 'Havoc has a lot of burst potential with the ability \"The Hunt\" that causes you to lose almost 50% of your hp instantly, be careful when you are low on life', 'Havoc lacks of defensive CD through the arena, so you might focus him until he dies', 'Havoc has a lot of mobility so kiting him might be a bad idea, you should try to focus him instead'),
('marksmanship', 'Be careful for his strong covenant abilty that allows him to shoot you through walls, it can be very deadly', 'Marksmanship works a lot on big burst potential, especially at opening, so take care of each other', 'Marksmanship lacks of defensives CD so you can easly kill him, especially on a good stun'),
('retribution', 'Retribution has an insane burst potential everytime he gets his \"wings\" you have to kite it or tu use any defensive CD to try to survive it', 'Retribution has a lot of healing potential but to do so he has to lose a lot of burst so focusing him is a good idea', 'Retribution has only one big defensive CD that is his bubble, so after he used it, he is an easy focus'),
('shadow', 'Shadow Priest has a lot of damage over time and burst potential but can be kicked to avoid damages for some times', 'Shadow Priest has a strong ability that allows him to swap his current hp with another ally. You can kill him instead if he does that to save his ally', 'Shadow Priest has some usefull defensives CD so it might not be the easiest class to focus'),
('subtlety', 'Subtlety has a lot of burst everytime he opens from stealth, so you should be careful when he is engaging on you', 'Rogues will always try to get out of combat behind a pillar to get a re-stealth so you should always try to keep them in combat', 'Rogues have only 2 defensives CD (one physical one magical) so you can easely kill them, especially on a good stun'),
('survival', 'Survival has a lot of burst potential, be careful when he use his freezing trap on another ally', 'Don\'t try to kite a Survival, he has always a lot of tools to keep harassing you even if he is a melee specialization', 'Survival lacks of defensives CD so you can easly kill him, especially on a good stun'),
('unholy', 'Try to kite the Death Knight because he has almost no movement CD', 'Watch out for his grab and covenant ability that makes him grab 5 times in 10 seconds, try to hide behind a pillar', 'Death Knight has a lot of HP and Defense so it\'s almost always a better idea to focus the other DPS'),
('windwalker', 'Windwalker has an insane burst potential, especially when he summons his tiger and his clones, so when he does you MUST use a defensive CD', 'His tiger and clones can be CCed so try to do that to mitigate a lot of damage', 'Windwalker has only one strong defensive CD every 1 min 30 that is touch of karma, but he can be easely taken down without it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advices`
--
ALTER TABLE `advices`
  ADD PRIMARY KEY (`Specialization`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
