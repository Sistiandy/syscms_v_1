
--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`, `input_date`, `last_update`) VALUES
(1, 'Super Admin', NULL, '2015-02-16 23:18:13'),
(2, 'Admin', NULL, '2015-02-16 23:18:13');

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_full_name`, `user_password`, `user_email`, `user_description`, `input_date`, `last_update`, `role_id`) VALUES
(1, 'admin', 'Admin', 'cfae66c98aa8d86383e07f1e1ea5d68e1cc6a613', 'admin@example.com', 'Admin default', NULL, '2015-07-30 04:32:54', 1);

