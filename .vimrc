syntax on

set encoding=UTF-8
set cursorline
set tabstop=3
set expandtab
set smartindent
set termguicolors
set mouse=a
set nu
set rnu
set complete+=t
set joinspaces
set nobackup
set nowritebackup
set wrap
set confirm
set cmdheight=2
set laststatus=2
set noshowmode
set incsearch
set hlsearch
colorscheme koehler
color slate 

call plug#begin()
Plug 'preservim/nerdtree'
Plug 'neoclide/coc.nvim', {'branch': 'release'}
Plug 'junegunn/fzf', { 'do': { -> fzf#install()} }
Plug 'preservim/nerdcommenter'
Plug 'itchyny/lightline.vim'
Plug 'mhinz/vim-startify'
Plug 'mattn/emmet-vim'
Plug 'luochen1990/rainbow'
Plug 'iamcco/markdown-preview.nvim', { 'do': 'cd app && npm install'  }
Plug 'cohama/lexima.vim'
Plug 'matze/vim-move'
Plug 'Yggdroot/indentLine'
Plug 'terroo/vim-simple-emoji'
Plug 'prettier/vim-prettier', { 'do': 'npm install' }
Plug 'rrethy/vim-hexokinase', { 'do': 'make hexokinase' }
Plug 'ntpeters/vim-better-whitespace'
Plug 'honza/vim-snippets'
Plug 'ryanoasis/vim-devicons'
Plug 'mhinz/vim-signify'
call plug#end()

""parentheses
let g:rainbow_active = 1

"" Para colorear el nerdtree :)
function! NERDTreeHighlightFile(extension, fg, bg, guifg, guibg)
 exec 'autocmd FileType nerdtree highlight ' . a:extension .' ctermbg='. a:bg .' ctermfg='. a:fg .' guibg='. a:guibg .' guifg='. a:guifg
 exec 'autocmd FileType nerdtree syn match ' . a:extension .' #^\s\+.*'. a:extension .'$#'
endfunction

call NERDTreeHighlightFile('jade', 'green', 'none', 'green', '#151515')
call NERDTreeHighlightFile('ini', 'yellow', 'none', 'yellow', '#151515')
call NERDTreeHighlightFile('md', 'blue', 'none', '#3366FF', '#151515')
call NERDTreeHighlightFile('yml', 'yellow', 'none', 'yellow', '#151515')
call NERDTreeHighlightFile('config', 'yellow', 'none', 'yellow', '#151515')
call NERDTreeHighlightFile('conf', 'yellow', 'none', 'yellow', '#151515')
call NERDTreeHighlightFile('json', 'yellow', 'none', 'yellow', '#151515')
call NERDTreeHighlightFile('html', 'yellow', 'none', 'yellow', '#151515')
call NERDTreeHighlightFile('styl', 'cyan', 'none', 'cyan', '#151515')
call NERDTreeHighlightFile('css', 'cyan', 'none', 'cyan', '#151515')
call NERDTreeHighlightFile('coffee', 'Red', 'none', 'red', '#151515')
call NERDTreeHighlightFile('js', 'Red', 'none', '#ffa500', '#151515')
call NERDTreeHighlightFile('php', 'Magenta', 'none', '#ff00ff', '#151515')
call NERDTreeHighlightFile('ds_store', 'Gray', 'none', '#686868', '#151515')
call NERDTreeHighlightFile('gitconfig', 'Gray', 'none', '#686868', '#151515')
call NERDTreeHighlightFile('gitignore', 'Gray', 'none', '#686868', '#151515')
call NERDTreeHighlightFile('bashrc', 'Gray', 'none', '#686868', '#151515')
call NERDTreeHighlightFile('bashprofile', 'Gray', 'none', '#686868', '#151515')

""emoji...
let g:neosnippet#snippets_directory='~/.vim/neosnippets'


"" nerdtree
autocmd VimEnter * NERDTree | wincmd p
let NERDTreeShowHidden=1

"" colores
    let g:Hexokinase_highlighters = ['foregroundfull']
" Exit Vim if NERDTree is the only window left.
autocmd BufEnter * if tabpagenr('$') == 1 && winnr('$') == 1 && exists('b:NERDTree') && b:NERDTree.isTabTree() |
    \ quit | endif

let g:NERDTreeDirArrowExpandable = '=>'
let g:NERDTreeDirArrowCollapsible = '▾'

""alias para guardar con sudo vim
command! -nargs=0 Sw wq !sudo tee % > /dev/null

""mover seleccionado
let g:move_key_modifier = 'C'

"" indentado de lineas
let g:indentLine_char = 'x'

"" git
set updatetime=100

"" prettier
let g:prettier#autoformat = 1
let g:prettier#autoformat_require_pragma = 0
let g:prettier#exec_cmd_async = 1
autocmd BufWritePre *.php Prettier

"" arreglar los errores con ficheros md
au InsertLeave *.md CocCommand markdownlint.fixAll

"" mapeos
map <c-t> <esc>:tabnew<cr>                                                      
map <c-e> <esc>:tabnext<cr>                                                     
map <c-w> <esc>:tabclose<cr>                                                     
map <C-n> :NERDTreeToggle<CR>
"" Con esto puedo comentar varias lineas :D
map <C-a> <plug>NERDCommenterMinimal<CR>
nmap <C-f> :FZF<CR>

""esto es para pulsar el tab y que el autocompletado lo llene uwu
inoremap <silent><expr> <TAB>
      \ pumvisible() ? coc#_select_confirm() :
      \ coc#expandableOrJumpable() ? "\<C-r>=coc#rpc#request('doKeymap', ['snippets-expand-jump',''])\<CR>" :
      \ <SID>check_back_space() ? "\<TAB>" :
      \ coc#refresh()

function! s:check_back_space() abort
  let col = col('.') - 1
  return !col || getline('.')[col - 1]  =~# '\s'
endfunction

let g:coc_snippet_next = '<tab>'
