USE [emotions]
GO
/****** Object:  Table [dbo].[EmploymentStatus]    Script Date: 12/06/2016 18:09:31 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[EmploymentStatus](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Status] [nchar](12) NOT NULL,
 CONSTRAINT [PK_EmploymentStatus] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)

GO
