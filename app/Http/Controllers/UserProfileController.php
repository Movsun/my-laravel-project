<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateUserProfileRequest;
use App\Http\Requests\UpdateUserProfileRequest;
use App\Repositories\UserProfileRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Routing\Controller as AppBaseController;

class UserProfileController extends AppBaseController
{
    /** @var  UserProfileRepository */
    private $userProfileRepository;

    public function __construct(UserProfileRepository $userProfileRepo)
    {
        $this->userProfileRepository = $userProfileRepo;
    }

    /**
     * Display a listing of the UserProfile.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userProfileRepository->pushCriteria(new RequestCriteria($request));
        $userProfiles = $this->userProfileRepository->all();

        return view('userProfiles.index')
            ->with('userProfiles', $userProfiles);
    }

    /**
     * Show the form for creating a new UserProfile.
     *
     * @return Response
     */
    public function create()
    {
        return view('userProfiles.create');
    }

    /**
     * Store a newly created UserProfile in storage.
     *
     * @param CreateUserProfileRequest $request
     *
     * @return Response
     */
    public function store(CreateUserProfileRequest $request)
    {
        $input = $request->all();

        $userProfile = $this->userProfileRepository->create($input);

        Flash::success('UserProfile saved successfully.');

        return redirect(route('userProfiles.index'));
    }

    /**
     * Display the specified UserProfile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userProfile = $this->userProfileRepository->findWithoutFail($id);

        if (empty($userProfile)) {
            Flash::error('UserProfile not found');

            return redirect(route('userProfiles.index'));
        }

        return view('userProfiles.show')->with('userProfile', $userProfile);
    }

    /**
     * Show the form for editing the specified UserProfile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userProfile = $this->userProfileRepository->findWithoutFail($id);
        // $userProfile = App\UserProfile::where('user_id', $id);

        if (empty($userProfile)) {
            Flash::error('UserProfile not found');

            return redirect(route('userProfiles.index'));
        }

        return view('userProfiles.edit')->with('userProfile', $userProfile);
    }

    /**
     * Update the specified UserProfile in storage.
     *
     * @param  int              $id
     * @param UpdateUserProfileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserProfileRequest $request)
    {
        $userProfile = $this->userProfileRepository->findWithoutFail($id);

        if (empty($userProfile)) {
            Flash::error('UserProfile not found');

            return redirect(route('userProfiles.index'));
        }

        $userProfile = $this->userProfileRepository->update($request->all(), $id);

        Flash::success('UserProfile updated successfully.');

        return redirect(route('userProfiles.index'));
    }

    /**
     * Remove the specified UserProfile from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userProfile = $this->userProfileRepository->findWithoutFail($id);

        if (empty($userProfile)) {
            Flash::error('UserProfile not found');

            return redirect(route('userProfiles.index'));
        }

        $this->userProfileRepository->delete($id);

        Flash::success('UserProfile deleted successfully.');

        return redirect(route('userProfiles.index'));
    }
}
