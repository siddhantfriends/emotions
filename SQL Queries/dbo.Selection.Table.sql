USE [emotions]
GO
/****** Object:  Table [dbo].[Selection]    Script Date: 12/06/2016 18:09:31 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Selection](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[First] [char](1) NOT NULL,
	[Second] [char](1) NOT NULL,
	[Third] [char](1) NOT NULL,
 CONSTRAINT [PK_Selection] PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)

GO
SET ANSI_PADDING OFF
GO
