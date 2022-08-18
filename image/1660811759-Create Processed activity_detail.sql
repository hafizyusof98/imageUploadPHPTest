USE [MY_TEST]
GO

/****** Object:  Table [dbo].[activity_detail]    Script Date: 2/4/2021 9:22:06 AM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[Activity](
	[activitylk_ky] [int] NOT NULL,
	[activitylk_nm] [varchar](100) NULL,
	[activitylvl1_nm] [varchar](20) NULL,
	[activitylvl2_nm] [varchar](20) NULL,
	[activitylvl3_nm] [varchar](20) NULL,
	[equiplk_ky] [int] NULL,
	[zonelk_nm] [varchar](40) NULL,
	[modulelk_nm] [varchar](40) NULL,
	[stationlk_dn] [varchar](100) NULL,
	[processlk_ky] [int] NOT NULL,
	[invitemlk_ky] [int] NOT NULL,
	[runtyplk_ky] [int] NOT NULL,
	[week_of_year] [int] NULL,
	[year_dt] [int] NULL,
	[shift_dt] [datetime] NULL,
	[datehour_dt] [datetime] NULL,
	[shift_DN] [varchar](50) NULL,
	[experiment_nm] [varchar](50) NULL,
	[activity_instance_sm] [int] NULL,
	[activity_duration_sm] [int] NULL
) ON [PRIMARY]
GO

