USE [emotions]
GO
/****** Object:  Table [dbo].[User]    Script Date: 12/06/2016 18:09:31 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[User](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Gender] [varchar](6) NOT NULL,
	[Age] [int] NOT NULL,
	[Nationality] [varchar](30) NOT NULL,
	[Education] [varchar](50) NOT NULL,
	[DegreeTitle] [varchar](40) NOT NULL,
	[EmploymentStatus] [varchar](15) NOT NULL,
 CONSTRAINT [PK_User] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)

GO
SET ANSI_PADDING OFF
GO
